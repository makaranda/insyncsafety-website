<?php

declare(strict_types=1);

namespace Termwind;

use ReflectionClass;
use Symfony\Component\Console\Helper\SymfonyQuestionHelper;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\StreamableInputInterface;
use Symfony\Component\Console\Question\Question as SymfonyQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Termwind\Helpers\QuestionHelper;

/**
 * @internal
 */
final class Question
{
    /**
     * The streamable input to receive the input from the user.
     */
    private static StreamableInputInterface|null $streamableInput;

    /**
     * An instance of Symfony's question helper.
     */
    private SymfonyQuestionHelper $helper;

<<<<<<< HEAD
    public function __construct(SymfonyQuestionHelper $helper = null)
    {
        $this->helper = $helper ?? new QuestionHelper();
=======
    public function __construct(?SymfonyQuestionHelper $helper = null)
    {
        $this->helper = $helper ?? new QuestionHelper;
>>>>>>> origin/yesen
    }

    /**
     * Sets the streamable input implementation.
     */
    public static function setStreamableInput(StreamableInputInterface|null $streamableInput): void
    {
<<<<<<< HEAD
        self::$streamableInput = $streamableInput ?? new ArgvInput();
=======
        self::$streamableInput = $streamableInput ?? new ArgvInput;
>>>>>>> origin/yesen
    }

    /**
     * Gets the streamable input implementation.
     */
    public static function getStreamableInput(): StreamableInputInterface
    {
<<<<<<< HEAD
        return self::$streamableInput ??= new ArgvInput();
=======
        return self::$streamableInput ??= new ArgvInput;
>>>>>>> origin/yesen
    }

    /**
     * Renders a prompt to the user.
     *
     * @param  iterable<array-key, string>|null  $autocomplete
     */
<<<<<<< HEAD
    public function ask(string $question, iterable $autocomplete = null): mixed
=======
    public function ask(string $question, ?iterable $autocomplete = null): mixed
>>>>>>> origin/yesen
    {
        $html = (new HtmlRenderer)->parse($question)->toString();

        $question = new SymfonyQuestion($html);

        if ($autocomplete !== null) {
            $question->setAutocompleterValues($autocomplete);
        }

        $output = Termwind::getRenderer();

        if ($output instanceof SymfonyStyle) {
            $property = (new ReflectionClass(SymfonyStyle::class))
                ->getProperty('questionHelper');

            $property->setAccessible(true);

            $currentHelper = $property->isInitialized($output)
                ? $property->getValue($output)
<<<<<<< HEAD
                : new SymfonyQuestionHelper();
=======
                : new SymfonyQuestionHelper;
>>>>>>> origin/yesen

            $property->setValue($output, new QuestionHelper);

            try {
                return $output->askQuestion($question);
            } finally {
                $property->setValue($output, $currentHelper);
            }
        }

        return $this->helper->ask(
            self::getStreamableInput(),
            Termwind::getRenderer(),
            $question,
        );
    }
}
