import { ICreatePlaceDTO } from "../../dtos/ICreatePlaceDTO";
import { Place } from "../typeorm/entities/Place";


interface IPlacesRepository {
  create(data: ICreatePlaceDTO): Promise<Place>;
  findByName(name: string): Promise<Place>;
  findById(id: string): Promise<Place>;
}

export { IPlacesRepository };