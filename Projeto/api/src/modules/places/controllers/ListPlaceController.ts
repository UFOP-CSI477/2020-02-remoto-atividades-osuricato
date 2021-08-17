import { Request, Response } from "express"
import { container } from "tsyringe";

import { ListPlaceService } from "../services/ListPlaceService";

class ListPlaceController {
  async handle(request: Request, response: Response): Promise<Response> {
    const { id } = request.params

    const listPlaceService = container.resolve(ListPlaceService)

    const place = await listPlaceService.execute(id)

    return response.status(201).send(place)
  }
}

export { ListPlaceController }