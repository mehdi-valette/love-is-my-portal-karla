// @ts-check
import { test, expect } from "@playwright/test";
import { LanguageChoicePage } from "./pom/language-choice";
import { LandingPage } from "./pom/landing-page";
import { StripePage } from "./pom/stripe";
import { PaymentConfirmedPage } from "./pom/payment-confirmed";

test("french website", async ({ page }) => {
  const langChoice = new LanguageChoicePage(page);
  const landing = new LandingPage(page);
  const stripe = new StripePage(page);
  const paymentConfirmed = new PaymentConfirmedPage(page);

  await langChoice.goto();
  await langChoice.checkText();
  await langChoice.gotoFrench();

  expect(landing.getLanguage()).toBe("fr");
  await landing.checkText();

  const currentUrl = page.url();

  await landing.gotoPaymentTopPage();
  expect(stripe.getLanguage()).toBe("fr");
  await stripe.checkText();

  await page.goto(currentUrl);

  await landing.gotoPaymentBottomPage();
  expect(stripe.getLanguage()).toBe("fr");
  await stripe.checkText();

  await paymentConfirmed.goto("fr");
  expect(paymentConfirmed.getLanguage()).toBe("fr");
  await paymentConfirmed.checkText();
  await paymentConfirmed.gotoLandingPage();

  await landing.checkText();
  expect(landing.getLanguage()).toBe("fr");
});

test("portuguese website", async ({ page }) => {
  const langChoice = new LanguageChoicePage(page);
  const landing = new LandingPage(page);
  const stripe = new StripePage(page);
  const paymentConfirmed = new PaymentConfirmedPage(page);

  await langChoice.goto();
  await langChoice.checkText();
  await langChoice.gotoPortuguese();

  expect(landing.getLanguage()).toBe("pt");
  await landing.checkText();

  const currentUrl = page.url();

  await landing.gotoPaymentTopPage();
  expect(stripe.getLanguage()).toBe("pt");
  await stripe.checkText();

  await page.goto(currentUrl);

  await landing.gotoPaymentBottomPage();
  expect(stripe.getLanguage()).toBe("pt");
  await stripe.checkText();

  await paymentConfirmed.goto("pt");
  expect(paymentConfirmed.getLanguage()).toBe("pt");
  await paymentConfirmed.checkText();
  await paymentConfirmed.gotoLandingPage();

  await landing.checkText();
  expect(landing.getLanguage()).toBe("pt");
});
