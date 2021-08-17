import { Column, Entity, PrimaryColumn } from "typeorm";

@Entity("places")
class Place {
  @PrimaryColumn()
  id: string

  @Column()
  name: string

  @Column()
  image: string

  @Column()
  email: string

  @Column()
  whatsapp: string

  @Column()
  latitude: number

  @Column()
  longitude: number

  @Column()
  city: string

  @Column()
  uf: string
}

export { Place }