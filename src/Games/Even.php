<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\play;

const MIN = 1;
const MAX = 101;
const INSTRUCTIONS = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function start(): void
{
    $getRound = function (): array {
        $question = rand(MIN, MAX);
        echo "Question: $question\n"; // Выводим вопрос
        $answer = isEven($question) ? "yes" : "no";
        return [$question, $answer];
    };
    play(INSTRUCTIONS, $getRound);
}
