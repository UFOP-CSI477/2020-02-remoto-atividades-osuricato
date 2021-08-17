interface ICreatePlaceDTO {
  id?: string
  name: string
  image?: string
  email: string
  whatsapp: string
  latitude: number
  longitude: number
  city: string
  uf: string
}

export { ICreatePlaceDTO }