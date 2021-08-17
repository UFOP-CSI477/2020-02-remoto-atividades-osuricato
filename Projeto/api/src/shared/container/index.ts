import { container } from "tsyringe";

import { PlacesRepository } from "@modules/places/infra/repositories/implementations/PlacesRepository";
import { IPlacesRepository } from "@modules/places/infra/repositories/IPlacesRepository";

container.registerSingleton<IPlacesRepository>(
  "PlacesRepository",
  PlacesRepository
);
