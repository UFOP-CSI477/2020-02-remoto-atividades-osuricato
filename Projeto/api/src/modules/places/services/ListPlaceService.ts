import { inject, injectable } from "tsyringe";

import { AppError } from "@shared/errors/AppErro";
import { Place } from "../infra/typeorm/entities/Place";
import { IPlacesRepository } from "../infra/repositories/IPlacesRepository";

@injectable()
class ListPlaceService {
  constructor(
    @inject("PlacesRepository")
    private placesRepository: IPlacesRepository
  ) { }

  async execute(id: string): Promise<Place> {
    const place = await this.placesRepository.findById(id)

    if (!place) {
      throw new AppError("Place not exists!");
    }

    return place
  }
}

export { ListPlaceService }