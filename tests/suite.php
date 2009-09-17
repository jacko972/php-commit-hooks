<?php
/**
 * Copyright (c) <2009>, all contributors
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 *
 * - Redistributions of source code must retain the above copyright notice, 
 *   this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright notice, 
 *   this list of conditions and the following disclaimer in the documentation 
 *   and/or other materials provided with the distribution.
 * - Neither the name of the project nor the names of its contributors may 
 *   be used to endorse or promote products derived from this software without 
 *   specific prior written permission.
 *
 * This software is provided by the copyright holders and contributors "as is" 
 * and any express or implied warranties, including, but not limited to, the 
 * implied warranties of merchantability and fitness for a particular purpose 
 * are disclaimed. in no event shall the copyright owner or contributors be 
 * liable for any direct, indirect, incidental, special, exemplary, or 
 * consequential damages (including, but not limited to, procurement of 
 * substitute goods or services; loss of use, data, or profits; or business 
 * interruption) however caused and on any theory of liability, whether in 
 * contract, strict liability, or tort (including negligence or otherwise) 
 * arising in any way out of the use of this software, even if advised of the 
 * possibility of such damage.
 *
 * @package php-commit-hooks
 * @version $Revision$
 * @license http://www.opensource.org/licenses/bsd-license.html New BSD license
 */

// Set up environment, if this test suite is run independant from the main test
// suite.
require __DIR__ . '/test_environment.php';

/*
 * Require test suites.
 */
require 'base_suite.php';
require 'commit_message_suite.php';
require 'lint_suite.php';
require 'svn_keywords_suite.php';

/**
* Test suite for Web Content Viewer
*/
class pchTestSuite extends PHPUnit_Framework_TestSuite
{
    /**
     * Basic constructor for test suite
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->setName( 'php-commit-hooks' );

        $this->addTestSuite( pchBaseTestSuite::suite() );
        $this->addTestSuite( pchCommitMessageTestSuite::suite() );
        $this->addTestSuite( pchLintTestSuite::suite() );
        $this->addTestSuite( pchSvnKeywordsTestSuite::suite() );
    }

    /**
     * Return test suite
     * 
     * @return PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        return new pchTestSuite( __CLASS__ );
    }
}

