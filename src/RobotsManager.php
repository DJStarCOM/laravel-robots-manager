<?php

namespace DJStarCOM\RobotsManager;

/**
 * Class RobotsManager
 * @package DJStarCOM\RobotsManager
 */
class RobotsManager
{
    /**
     * The lines for the robots.txt.
     *
     * @var array
     */
    protected $lines = [];

    /**
     * Generate the robots.txt data.
     *
     * @return string|null
     */
    public function generate(): ?string
    {
        return implode(PHP_EOL, $this->lines);
    }

    /**
     * Add a Sitemap to the robots.txt.
     *
     * @param string $sitemap
     */
    public function addSitemap(string $sitemap): void
    {
        $this->addLine('Sitemap: ' . $sitemap);
    }

    /**
     * Add a line to the robots.txt.
     *
     * @param string $line
     */
    protected function addLine(string $line): void
    {
        $this->lines[] = $line;
    }

    /**
     * Add a User-agent to the robots.txt.
     *
     * @param string $userAgent
     */
    public function addUserAgent(string $userAgent): void
    {
        $this->addLine('User-agent: ' . $userAgent);
    }

    /**
     * Add a Host to the robots.txt.
     *
     * @param string $host
     */
    public function addHost(string $host): void
    {
        $this->addLine('Host: ' . $host);
    }

    /**
     * Add a disallow rule to the robots.txt.
     *
     * @param string|array $directories
     */
    public function addDisallow($directories): void
    {
        $this->addRuleLine($directories, 'Disallow');
    }

    /**
     * Add a rule to the robots.txt.
     *
     * @param string|array $directories
     * @param string $rule
     */
    protected function addRuleLine($directories, string $rule): void
    {
        foreach ((array)$directories as $directory) {
            $this->addLine($rule . ': ' . $directory);
        }
    }

    /**
     * Add a allow rule to the robots.txt.
     *
     * @param string|array $directories
     */
    public function addAllow($directories): void
    {
        $this->addRuleLine($directories, 'Allow');
    }

    /**
     * Add a comment to the robots.txt.
     *
     * @param string $comment
     */
    public function addComment(string $comment): void
    {
        $this->addLine('# ' . $comment);
    }

    /**
     * Add a spacer to the robots.txt.
     */
    public function addSpacer(): void
    {
        $this->addLine('');
    }

    /**
     * Reset the lines.
     *
     * @return void
     */
    public function reset(): void
    {
        $this->lines = [];
    }
}
