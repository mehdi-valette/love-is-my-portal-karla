import { expect } from "@playwright/test";

export class StripePage {
  page;

  /** @param {import('@playwright/test').Page} page */
  constructor(page) {
    this.page = page;
  }

  getLanguage() {
    const locale = new URL(this.page.url()).searchParams.get("locale");

    if (locale != null && ["fr", "pt"].includes(locale)) {
      return locale;
    }

    throw new Error(`unknown language ${locale}`);
  }

  async checkText() {
    const lang = this.getLanguage();

    switch (lang) {
      case "fr":
        await this.checkTextFr();
        break;

      case "pt":
        await this.checkTextPt();
        break;

      default:
        throw new Error("language not recognized");
    }
  }

  async checkTextFr() {
    await expect(
      this.page.getByRole("heading", { name: "Informations de livraison" }),
    ).toBeVisible();
  }

  async checkTextPt() {
    await expect(
      this.page.getByRole("heading", { name: "Dados de envio" }),
    ).toBeVisible();
  }
}
