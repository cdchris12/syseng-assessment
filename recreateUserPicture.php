<?php

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;


// Create the user profile field and instance.
FieldStorageConfig::create([
  'entity_type' => 'user',
  'field_name' => 'user_picture',
  'type' => 'image',
  'translatable' => '0',
])->save();
FieldConfig::create([
  'label' => 'User Picture',
  'description' => '',
  'field_name' => 'user_picture',
  'entity_type' => 'user',
  'bundle' => 'user',
  'required' => 0,
])->save();
