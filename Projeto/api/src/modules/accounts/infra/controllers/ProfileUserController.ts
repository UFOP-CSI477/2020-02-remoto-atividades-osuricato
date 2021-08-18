import { Request, Response } from "express";
import { container } from "tsyringe";

import { ProfileUserUseCase } from "@modules/accounts/useCases/profileUserUseCase/ProfileUserUseCase";

class ProfileUserController {
  async handle(request: Request, response: Response): Promise<Response> {
    const { id } = request.params;

    const profileUserUseCase = container.resolve(ProfileUserUseCase);

    const user = await profileUserUseCase.execute(id);
    return response.json(user);
  }
}

export { ProfileUserController };
