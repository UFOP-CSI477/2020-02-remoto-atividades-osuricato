import { Router } from 'express'
import multer from 'multer'

import { CreatePlaceController } from '@modules/places/controllers/CreatePlaceController'
import uploadConfig from '@config/upload'

const placesRoutes = Router()

const upload = multer(uploadConfig)

const createPlaceController = new CreatePlaceController()

placesRoutes.post("/", createPlaceController.handle)

export { placesRoutes }