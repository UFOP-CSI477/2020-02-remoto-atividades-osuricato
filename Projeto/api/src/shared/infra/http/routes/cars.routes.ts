import { Router } from "express";
import multer from "multer";

import uploadConfig from "@config/upload";

import { CreateCarController } from "@modules/cars/infra/controllers/CreateCarController";
import { ListAvailableCarsController } from "@modules/cars/infra/controllers/ListAvailableCarsController";
import { CreateCarSpecificationController } from "@modules/cars/infra/controllers/CreateCarSpecificationController";
import { UploadCarImagesController } from "@modules/cars/infra/controllers/UploadCarImagesController";

import { ensureAdmin } from "../middlewares/ensureAdmin";
import { ensureAuthenticated } from "../middlewares/ensureAuthenticated";

const carsRoutes = Router();

const createCarController = new CreateCarController();
const listAvaialableCarsController = new ListAvailableCarsController();
const createCarSpecificationController = new CreateCarSpecificationController();
const uploadCarImagesController = new UploadCarImagesController();

const upload = multer(uploadConfig);

carsRoutes.post(
  "/",
  ensureAuthenticated,
  ensureAdmin,
  createCarController.handle
);

carsRoutes.get("/available", listAvaialableCarsController.handle);

carsRoutes.post(
  "/specifications/:id",
  ensureAuthenticated,
  ensureAdmin,
  createCarSpecificationController.handle
);

carsRoutes.post(
  "/images/:id",
  ensureAuthenticated,
  ensureAdmin,
  upload.array("images"),
  uploadCarImagesController.handle
);

export { carsRoutes };
