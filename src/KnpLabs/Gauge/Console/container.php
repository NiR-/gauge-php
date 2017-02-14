<?php

use function DI\{get, object};
use DI\Container;
use KnpLabs\Gauge\DataStore;
use KnpLabs\Gauge\HookRegistry;
use KnpLabs\Gauge\RequestHandler\ExecutionStartingRequest;
use KnpLabs\Gauge\RequestHandler\Registry;
use KnpLabs\Gauge\RequestHandler\StepValidateRequest;
use KnpLabs\Gauge\RequestHandler\SuiteDataStoreInit;

return [
    'data_store.scenario' => object(DataStore::class),
    'data_store.spec' => object(DataStore::class),
    'data_store.suite' => object(DataStore::class),
    'hook_registry.after_scenario_hooks' => object(HookRegistry::class),
    'hook_registry.after_spec_hooks' => object(HookRegistry::class),
    'hook_registry.after_step_hooks' => object(HookRegistry::class),
    'hook_registry.after_suite_hooks' => object(HookRegistry::class),
    'hook_registry.before_scenario_hooks' => object(HookRegistry::class),
    'hook_registry.before_spec_hooks' => object(HookRegistry::class),
    'hook_registry.before_step_hooks' => object(HookRegistry::class),
    'hook_registry.before_suite_hooks' => object(HookRegistry::class),
    'request_handler.execution_starting_request' => object(ExecutionStartingRequest::class)
        ->constructor(get('hook_registry.before_suite_hooks')),
    'request_handler.step_validate_request' => object(StepValidateRequest::class),
    'request_handler.suite_data_store_init' => object(SuiteDataStoreInit::class),
    'request_handler.registry' => function (Container $container) {
        return new Registry([
            $container->get('request_handler.execution_starting_request'),
            $container->get('request_handler.step_validate_request'),
            $container->get('request_handler.suite_data_store_init'),
        ]);
    },
];
