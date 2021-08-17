import { app } from "@shared/infra/http/app";

app.listen(3333, () => {
  console.log("Server started on port 3333.");
});
