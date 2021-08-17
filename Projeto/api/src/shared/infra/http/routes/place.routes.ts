import { Router } from 'express'
import multer from 'multer'

import uploadConfig from '@config/upload'
import { CreatePlaceController } from '@modules/places/controllers/CreatePlaceController'
import { ListPlaceController } from '@modules/places/controllers/ListPlaceController'

const placesRoutes = Router()

const upload = multer(uploadConfig)

const createPlaceController = new CreatePlaceController()
const listPlaceController = new ListPlaceController()

placesRoutes.post("/", createPlaceController.handle)
placesRoutes.get("/:id", listPlaceController.handle)

export { placesRoutes }