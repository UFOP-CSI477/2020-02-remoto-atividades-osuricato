import { getRepository, Repository } from "typeorm";

import { Place } from "@modules/places/infra/typeorm/entities/Place";
import { ICreatePlaceDTO } from "@modules/places/dtos/ICreatePlaceDTO";
import { IPlacesRepository } from "../IPlacesRepository";

class PlacesRepository implements IPlacesRepository {
  private repository: Repository<Place>

  constructor() {
    this.repository = getRepository(Place)
  }

  async create({
    name,
    image,
    email,
    whatsapp,
    latitude,
    longitude,
    city,
    uf
  }: ICreatePlaceDTO): Promise<Place> {
    const place = this.repository.create({
      name,
      image,
      email,
      whatsapp,
      latitude,
      longitude,
      city,
      uf
    })

    return this.repository.save(place)
  }

  async findByName(name: string): Promise<Place> {
    const place = await this.repository.findOne({ name });

    return place;
  }

  async findById(id: string): Promise<Place> {
    const place = await this.repository.findOne(id);

    return place;
  }
}

export { PlacesRepository }