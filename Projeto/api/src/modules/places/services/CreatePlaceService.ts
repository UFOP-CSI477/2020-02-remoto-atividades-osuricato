import { inject, injectable } from "tsyringe";

import { AppError } from "@shared/errors/AppErro";
import { Place } from "../infra/typeorm/entities/Place";
import { ICreatePlaceDTO } from "../dtos/ICreatePlaceDTO";
import { IPlacesRepository } from "../infra/repositories/IPlacesRepository";

@injectable()
class CreatePlaceService {
  constructor(
    @inject("PlacesRepository")
    private placesRepository: IPlacesRepository
  ) { }

  async execute({
    name,
    email,
    whatsapp,
    latitude,
    longitude,
    city,
    uf,
  }: ICreatePlaceDTO): Promise<Place> {
    const placeAlreadyExists = await this.placesRepository.findByName(name)

    if (placeAlreadyExists) {
      throw new AppError("Place already exists!");
    }

    const place = await this.placesRepository.create({
      name,
      email,
      whatsapp,
      latitude,
      longitude,
      city,
      uf,
    })

    return place
  }
}

export { CreatePlaceService }