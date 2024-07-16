import { alpineInit } from "../alpine";
import { TAlpine } from "../alpine/alpine.interface";

/**
 * Description placeholder
 *
 * @export
 * @class Bitmunch
 * @typedef {Bitmunch}
 */
export class Bitmunch {
  Alpine: TAlpine;
  constructor() {
    this.Alpine = alpineInit();
  }
}
