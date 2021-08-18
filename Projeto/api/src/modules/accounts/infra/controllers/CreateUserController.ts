import { Request, Response } from "express";
import { container } from "tsyringe";

import { CreateUserService } from "@modules/accounts/services/CreateUserService";

class CreateUserController {
  async handle(request: Request, response: Response): Promise<Response> {
    const { name, email, password, driver_license } = request.body;
    const createUserService = container.resolve(CreateUserService);

    await createUserService.execute({
      name,
      email,
      password,
      driver_license,
    });

    return response.status(201).send();
  }
}

export { CreateUserController };
