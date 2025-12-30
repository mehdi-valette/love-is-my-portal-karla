// @ts-check
import { test, expect } from "@playwright/test";
import { LanguageChoicePage } from "./pom/language-choice";
import { LandingPage } from "./pom/landing-page";
import { StripePage } from "./pom/stripe";
import { PaymentConfirmedPage } from "./pom/payment-confirmed";

/** @type {["fr", "pt"]} */
const languages = ["fr", "pt"];

languages.forEach((lang) => {
  test(`Website ${lang}`, async ({ page }) => {
    const langChoice = new LanguageChoicePage(page);
    const landing = new LandingPage(page);
    const stripe = new StripePage(page);
    const paymentConfirmed = new PaymentConfirmedPage(page);

    await langChoice.goto();
    await langChoice.checkText();
    await langChoice.gotoPage(lang);

    expect(landing.getLanguage()).toBe(lang);
    await landing.checkText();

    const currentUrl = page.url();

    await landing.gotoPaymentTopPage();
    expect(stripe.getLanguage()).toBe(lang);
    await stripe.checkText();

    await page.goto(currentUrl);

    await landing.gotoPaymentBottomPage();
    expect(stripe.getLanguage()).toBe(lang);
    await stripe.checkText();

    await paymentConfirmed.goto(lang);
    expect(paymentConfirmed.getLanguage()).toBe(lang);
    await paymentConfirmed.checkText();
    await paymentConfirmed.gotoLandingPage();

    await landing.checkText();
    expect(landing.getLanguage()).toBe(lang);
  });
});
