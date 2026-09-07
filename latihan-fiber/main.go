package main

import (
	"log"

	"github.com/gofiber/fiber/v3"
)

func main() {
	app := fiber.New()

	app.Get("/", func(c fiber.Ctx) error {
		return c.SendString("Halo Pemrograman Web II")
	})

	app.Get("/api/info", func(c fiber.Ctx) error {
		return c.JSON(fiber.Map{
			"aplikasi": "Latihan Fiber",
			"versi":    "1.0.0",
			"status":   "berjalan",
		})
	})

	app.Get("/api/mahasiswa", func(c fiber.Ctx) error {
		return c.JSON(fiber.Map{
			"nim":         "H1H024001",
			"nama":        "Lulu Waskito Adi",
			"prodi":       "Teknik Komputer",
			"fakultas":    "Teknik",
			"universitas": "Universitas Jenderal Soedirman",
		})
	})

	log.Fatal(app.Listen(":3000"))
}
