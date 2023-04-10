<?php

return [
    'apiKey' => getenv('open_ai_key', ''),
    'model'  => getenv('gpt_model', 'gpt-3.5-turbo')
];
