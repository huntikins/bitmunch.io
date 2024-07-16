import { Alpine } from "@types/alpinejs";

declare global {
  interface Window {
    bitmunch: IBitmunch;
  }
}

export interface IBitmunch {
  Alpine: Alpine;
}
