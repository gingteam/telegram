<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains information about a poll.
 */
class Poll
{
    /**
     * @param string               $id
     * @param string               $question
     * @param PollOption[]         $options
     * @param int                  $total_voter_count
     * @param bool                 $is_closed
     * @param bool                 $is_anonymous
     * @param string               $type
     * @param bool                 $allows_multiple_answers
     * @param int|null             $correct_option_id
     * @param string|null          $explanation
     * @param MessageEntity[]|null $explanation_entities
     * @param int|null             $open_period
     * @param int|null             $close_date
     */
    public function __construct(
        private $id,
        private $question,
        private $options,
        private $total_voter_count,
        private $is_closed,
        private $is_anonymous,
        private $type,
        private $allows_multiple_answers,
        private $correct_option_id = null,
        private $explanation = null,
        private $explanation_entities = null,
        private $open_period = null,
        private $close_date = null,
    ) {
    }

    /**
     * Unique poll identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Poll question, 1-300 characters.
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * List of poll options.
     *
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Total number of users that voted in the poll.
     */
    public function getTotalVoterCount(): int
    {
        return $this->total_voter_count;
    }

    /**
     * True, if the poll is closed.
     */
    public function getIsClosed(): bool
    {
        return $this->is_closed;
    }

    /**
     * True, if the poll is anonymous.
     */
    public function getIsAnonymous(): bool
    {
        return $this->is_anonymous;
    }

    /**
     * Poll type, currently can be “regular” or “quiz”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * True, if the poll allows multiple answers.
     */
    public function getAllowsMultipleAnswers(): bool
    {
        return $this->allows_multiple_answers;
    }

    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     */
    public function getCorrectOptionId(): ?int
    {
        return $this->correct_option_id;
    }

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters.
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation.
     *
     * @return MessageEntity[]|null
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanation_entities;
    }

    /**
     * Optional. Amount of time in seconds the poll will be active after creation.
     */
    public function getOpenPeriod(): ?int
    {
        return $this->open_period;
    }

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed.
     */
    public function getCloseDate(): ?int
    {
        return $this->close_date;
    }
}
