<?php
/**
 * 凯拓软件 [临渊羡鱼不如退而结网,凯拓与你一同成长]
 * Project: topphp-swoole
 * Date: 2020/2/6 19:41
 * Author: sleep <sleep@kaituocn.com>
 */
declare(strict_types=1);

namespace Topphp\TopphpSwoole;

class SwooleEvent
{
    /**
     * Swoole onStart event.
     */
    const ON_START = 'start';

    /**
     * Swoole onWorkerStart event.
     */
    const ON_WORKER_START = 'workerStart';

    /**
     * Swoole onWorkerStop event.
     */
    const ON_WORKER_STOP = 'workerStop';

    /**
     * Swoole onWorkerExit event.
     */
    const ON_WORKER_EXIT = 'workerExit';

    /**
     * Swoole onPipeMessage event.
     */
    const ON_PIPE_MESSAGE = 'pipeMessage';

    /**
     * Swoole onRequest event.
     */
    const ON_REQUEST = 'request';

    /**
     * Swoole onReceive event.
     */
    const ON_RECEIVE = 'receive';

    /**
     * Swoole onConnect event.
     */
    const ON_CONNECT = 'connect';

    /**
     * Swoole onHandShake event.
     */
    const ON_HAND_SHAKE = 'handshake';

    /**
     * Swoole onOpen event.
     */
    const ON_OPEN = 'open';

    /**
     * Swoole onMessage event.
     */
    const ON_MESSAGE = 'message';

    /**
     * Swoole onClose event.
     */
    const ON_CLOSE = 'close';

    /**
     * Swoole onTask event.
     */
    const ON_TASK = 'task';

    /**
     * Swoole onFinish event.
     */
    const ON_FINISH = 'finish';

    /**
     * Swoole onShutdown event.
     */
    const ON_SHUTDOWN = 'shutdown';

    /**
     * Swoole onPacket event.
     */
    const ON_PACKET = 'packet';

    /**
     * Swoole onManagerStart event.
     */
    const ON_MANAGER_START = 'managerStart';

    /**
     * Swoole onManagerStop event.
     */
    const ON_MANAGER_STOP = 'managerStop';

    /**
     * Before server start, it's not a swoole event.
     */
    const ON_BEFORE_START = 'beforeStart';
}
