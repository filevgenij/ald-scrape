<?php
/**
 * Short description for Spider.php
 *
 * @package Spider
 * @author Cushty <Cushty@WIN-MECGV3ATQQV>
 * @version 0.1
 * @copyright (C) 2015 Cushty <Cushty@WIN-MECGV3ATQQV>
 * @license MIT
 */

namespace Ald\Scrape\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Spider extends Command
{
    protected function configure()
    {
        $this->setName('spider')
            ->setDescription('Get cars info from site');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $spider = $this->getApplication()->getService('spider');
        $spider->run(new \DateTime());
    }
}
