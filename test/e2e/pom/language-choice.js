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

  async gotoFrench() {
    await this.page.getByRole("link", { name: "Français" }).click();
  }

  async gotoPortuguese() {
    await this.page.getByRole("link", { name: "Português" }).click();
  }
}
