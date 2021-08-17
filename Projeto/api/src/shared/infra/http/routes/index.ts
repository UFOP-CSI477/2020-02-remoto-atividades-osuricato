import { Router } from "express";

import { placesRoutes } from "./place.routes"

const router = Router()

router.use("/places", placesRoutes)

export { router }