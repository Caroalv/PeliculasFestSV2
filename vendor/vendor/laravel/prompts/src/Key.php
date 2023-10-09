<?php

namespace Laravel\Prompts;

class Key
{
    const UP = "\e[A";

    const DOWN = "\e[B";

    const RIGHT = "\e[C";

    const LEFT = "\e[D";

    const UP_ARROW = "\eOA";

    const DOWN_ARROW = "\eOB";

    const RIGHT_ARROW = "\eOC";

    const LEFT_ARROW = "\eOD";

    const DELETE = "\e[3~";

    const BACKSPACE = "\177";

    const ENTER = "\n";

    const SPACE = ' ';

    const TAB = "\t";

    const SHIFT_TAB = "\e[Z";

    const HOME = "\e[1~";

    const END = "\e[4~";

    /**
     * Cancel/SIGINT
     */
    const CTRL_C = "\x03";

    /**
     * Previous/Up
     */
    const CTRL_P = "\x10";

    /**
     * Next/Down
     */
    const CTRL_N = "\x0E";

    /**
     * Forward/Right
     */
    const CTRL_F = "\x06";

    /**
     * Back/Left
     */
    const CTRL_B = "\x02";

    /**
     * Backspace
     */
    const CTRL_H = "\x08";

    /**
     * Home
     */
    const CTRL_A = "\x01";

    /**
     * End
     */
    const CTRL_E = "\x05";
}
