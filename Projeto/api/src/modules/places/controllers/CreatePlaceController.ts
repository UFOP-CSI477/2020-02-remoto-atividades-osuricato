import { Request, Response } from "express"
import { container } from "tsyringe";

import { CreatePlaceService } from "../services/CreatePlaceService";

class CreatePlaceController {
  async handle(request: Request, response: Response): Promise<Response> {
    const {
      name,
      email,
      whatsapp,
      latitude,
      longitude,
      city,
      uf,
    } = request.body

    const createPlaceService = container.resolve(CreatePlaceService)

    const place = await createPlaceService.execute({
      name,
      email,
      whatsapp,
      latitude,
      longitude,
      city,
      uf
    })

    return response.status(201).send(place)
  }
}

export { CreatePlaceController }