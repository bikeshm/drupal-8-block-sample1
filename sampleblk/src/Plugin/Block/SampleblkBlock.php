<?php

/**
 * @file
 */
namespace Drupal\sampleblk\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 * @Block(
 * id = "sample_block",
 * admin_label = @Translation("Sample block"),
 * )
 */
class SampleblkBlock extends BlockBase {
	/**
	 *
	 * {@inheritdoc}
	 *
	 */
	public function build() {
		return array (
			'#type' => 'markup',
      		'#markup' => 'This is sample Block content.',
		);
	}
}

?>