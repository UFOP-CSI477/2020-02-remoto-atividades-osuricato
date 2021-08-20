import { Router } from "express";
import multer from "multer";

import uploadConfig from "@config/upload";

import { ensureAuthenticated } from "@shared/infra/http/middlewares/ensureAuthenticated";
import { CreateUserController } from "@modules/accounts/infra/controllers/CreateUserController";
import { ListUsersController } from "@modules/accounts/infra/controllers/ListUsersController";
import { UpdateUserAvatarController } from "@modules/accounts/infra/controllers/UpdateUserAvatarController";
import { ProfileUserController } from "@modules/accounts/infra/controllers/ProfileUserController";

const usersRoutes = Router();

const uploadAvatar = multer(uploadConfig);

const createUsersController = new CreateUserController();
const listUsersController = new ListUsersController()
const updateUserAvatarController = new UpdateUserAvatarController();
const profileUserController = new ProfileUserController();

usersRoutes.post("/", createUsersController.handle);

usersRoutes.get("/", listUsersController.handle);

usersRoutes.patch(
  "/avatar",
  ensureAuthenticated,
  uploadAvatar.single("avatar"),
  updateUserAvatarController.handle
);

usersRoutes.get("/profile/:id", ensureAuthenticated, profileUserController.handle);

export { usersRoutes };
