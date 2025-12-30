import { expect } from "@playwright/test";

export class LanguageChoicePage {
  page;

  /** @param {import('@playwright/test').Page} page */
  constructor(page) {
    this.page = page;
  }

  async goto() {
    await this.page.goto("http://localhost:8080");
  }

  async checkText() {
    await expect(
      this.page.getByRole("heading", { name: "Escolha seu idioma" }),
    ).toBeVisible();
    await expect(
      this.page.getByRole("heading", { name: "Choisis ta langue" }),
    ).toBeVisible();
  }

  /** @param {"fr" | "pt"} lang */
  async gotoPage(lang) {
    switch (lang) {
      case "fr":
        await this.page.getByRole("link", { name: "Français" }).click();
        break;

      case "pt":
        await this.page.getByRole("link", { name: "Português" }).click();
        break;

      default:
        throw new Error("language unknown");
    }
  }
}
