import { MigrationInterface, QueryRunner, Table } from "typeorm";

export class CreatePlace1629235704682 implements MigrationInterface {

  public async up(queryRunner: QueryRunner): Promise<void> {
    await queryRunner.createTable(
      new Table({
        name: "places",
        columns: [
          {
            name: "id",
            type: "uuid",
            isPrimary: true
          },
          {
            name: "name",
            type: "varchar",
          },
          {
            name: "image",
            type: "varchar"
          },
          {
            name: "email",
            type: "varchar"
          },
          {
            name: "whatsapp",
            type: "varchar"
          },
          {
            name: "latitude",
            type: "numeric"
          },
          {
            name: "longitude",
            type: "numeric"
          },
          {
            name: "city",
            type: "varchar"
          },
          {
            name: "uf",
            type: "varchar"
          }
        ]
      })
    )
  }

  public async down(queryRunner: QueryRunner): Promise<void> {
    await queryRunner.dropTable("places")
  }
}
