import { expect } from "@playwright/test";

export class PaymentConfirmedPage {
  page;

  /** @param {import('@playwright/test').Page} page */
  constructor(page) {
    this.page = page;
  }

  /** @param {string} lang */
  async goto(lang) {
    await this.page.goto(`http://localhost:8080/${lang}/payment-confirmed`);
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
        throw new Error(`no test for the language ${lang}`);
    }
  }

  async checkTextFr() {
    await expect(
      this.page.getByText(
        "Merci pour votre achat ! Nous nous occupons de votre commande !",
      ),
    ).toBeVisible();
    await expect(this.page.getByText("Retour au site")).toBeVisible();
  }

  async checkTextPt() {
    await expect(
      this.page.getByText(
        "Merci pour votre achat ! Nous nous occupons de votre commande !",
      ),
    ).toBeVisible();
    await expect(this.page.getByText("Retour au site")).toBeVisible();
  }

  async gotoLandingPage() {
    this.page.getByRole("link", { name: "Retour au site" }).click();
  }
}
