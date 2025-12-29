import { expect } from "@playwright/test";

export class LandingPage {
  page;

  /** @param {import('@playwright/test').Page} page */
  constructor(page) {
    this.page = page;
  }

  getLanguage() {
    const paths = new URL(this.page.url()).pathname.split("/");

    for (const path of paths) {
      switch (path) {
        case "fr":
          return "fr";
        case "pt":
          return "pt";
      }
    }

    throw new Error(`lanaguage not found in ${paths}`);
  }

  async gotoPaymentTopPage() {
    const lang = this.getLanguage();
    const text =
      lang == "fr"
        ? "L'amour est Ton Portail par"
        : lang == "pt"
          ? "O amor é o teu portal"
          : "";

    await this.page
      .locator("section")
      .filter({ hasText: text })
      .getByRole("link")
      .click();
  }

  async gotoPaymentBottomPage() {
    await this.page
      .locator("div")
      .filter({ hasText: "Acheter le livre Lorem ipsum" })
      .getByRole("link")
      .click();
  }

  async checkText() {
    switch (this.getLanguage()) {
      case "fr":
        await this.checkTextFr();
        break;

      case "pt":
        await this.checkTextPt();
        break;

      default:
        throw new Error(`language ${this.getLanguage()} not found`);
    }
  }

  async checkTextFr() {
    await expect(
      this.page.getByRole("heading", { name: "L'amour est Ton Portail par" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "TOUTES NOUS PORTONS UNE" }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Ce livre est un témoignage de"),
    ).toBeVisible();

    await expect(
      this.page.getByText("Ce sont des pages vivantes, o"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Contenu du livre" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Des recettes de cuisine" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Des recettes de cuisine" }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Dans ce chapitre, je t’ouvre"),
    ).toBeVisible();

    await expect(
      this.page.getByText("C’est écouter le corps avec"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "À propos de l'autrice" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("img", { name: "photo de Karla" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Karla Alves", exact: true }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Diplômée en médecine dentaire"),
    ).toBeVisible();

    await expect(
      this.page.getByText("Passionnée par la nature, par"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Acheter le livre" }),
    ).toBeVisible();
  }

  async checkTextPt() {
    await expect(
      this.page.getByRole("heading", { name: "O amor é o teu portal" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "TOUTES NOUS PORTONS UNE" }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Ce livre est un témoignage de"),
    ).toBeVisible();

    await expect(
      this.page.getByText("Ce sont des pages vivantes, o"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Contenu du livre" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Des recettes de cuisine" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Des recettes de cuisine" }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Dans ce chapitre, je t’ouvre"),
    ).toBeVisible();

    await expect(
      this.page.getByText("C’est écouter le corps avec"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "À propos de l'autrice" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("img", { name: "photo de Karla" }),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Karla Alves", exact: true }),
    ).toBeVisible();

    await expect(
      this.page.getByText("Diplômée en médecine dentaire"),
    ).toBeVisible();

    await expect(
      this.page.getByText("Passionnée par la nature, par"),
    ).toBeVisible();

    await expect(
      this.page.getByRole("heading", { name: "Acheter le livre" }),
    ).toBeVisible();
  }
}
