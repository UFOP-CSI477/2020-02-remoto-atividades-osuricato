import { Router } from "express";

import { CreateRentalController } from "@modules/rentals/Services/createRental/CreateRentalController";
import { DevolutionRentalController } from "@modules/rentals/Services/devolutionRental/DevolutionRentalController";
import { ListRentalByUserController } from "@modules/rentals/Services/ListRentalsByUserController.ts/ListRentalsByUserController";

import { ensureAuthenticated } from "../middlewares/ensureAuthenticated";

const rentalRoutes = Router();

const createRentalController = new CreateRentalController();
const devolutionRentalController = new DevolutionRentalController();
const listRentalsByUserController = new ListRentalByUserController();

rentalRoutes.post("/", ensureAuthenticated, createRentalController.handle);
rentalRoutes.post(
  "/devolution/:id",
  ensureAuthenticated,
  devolutionRentalController.handle
);

rentalRoutes.get(
  "/user",
  ensureAuthenticated,
  listRentalsByUserController.handle
);

export { rentalRoutes };
