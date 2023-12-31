<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\play;

const MIN = 1;
const MAX = 101;
const INSTRUCTIONS = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function start(): void
{
    $getRound = function (): array {
        $question = rand(MIN, MAX);
        $answer = isPrime($question) ? "yes" : "no";
        return [$question, $answer];
    };
    play(INSTRUCTIONS, $getRound);
}
