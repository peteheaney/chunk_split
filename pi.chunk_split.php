<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'Chunk split',
	'pi_version' =>'1.0',
	'pi_author' =>'Pete Heaney',
	'pi_description' => 'Split a string into chunks',
	'pi_usage' => Chunk_split::usage()
);

class Chunk_split {

	public function __construct()
	{
		$this->EE =& get_instance();
	}

	public function split()
	{
		$string = $this->EE->TMPL->fetch_param('string');
		$length = $this->EE->TMPL->fetch_param('length');
		$end = $this->EE->TMPL->fetch_param('end');

		return chunk_split($string, $length, $end);
	}

	static function usage()
  {
  ob_start();
  ?>

Split a string into chunks.

The string to split is defined by the 'string' parameter.

The length of the chunk is defined by the 'length' parameter.

The line ending sequence (what goes between each chunk) is defined by the 'end' paramater.

=================
EXAMPLE
=================

{exp:chunk_split:split string="1234567890123456" length="4" end=" "}

This would output "1234 5678 9012 3456"

  <?php
  $buffer = ob_get_contents();

  ob_end_clean();

  return $buffer;
  }

}

/* End of file pi.chunk_split.php */
