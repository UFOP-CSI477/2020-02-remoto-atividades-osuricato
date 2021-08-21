import { inject, injectable } from "tsyringe";

import { ICategoriesRepository } from "@modules/cars/repositories/ICategoriesRepository";
import { AppError } from "@shared/errors/AppError";

@injectable()
class DeleteCategoryService {
  constructor(
    @inject("CategoriesRepository")
    private categoriesRepository: ICategoriesRepository
  ) {}

  async execute(id: string): Promise<void> {
    const user = await this.categoriesRepository.findById(id)

    if (!user) {
      throw new AppError("User not exist!");
    }

    await this.categoriesRepository.delete(user);
  }
}

export { DeleteCategoryService };
