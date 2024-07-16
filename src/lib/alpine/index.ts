import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
import { TAlpine } from "./alpine.interface";

/**
 * Initializes Alpine
 *
 * @returns {TAlpine}
 */
export const alpineInit = (): TAlpine => {
  // Alpine specific features
  Alpine.plugin(focus);

  return Alpine;
};
