<?php


namespace Website\Services;


use KikCmsCore\Services\DbService;
use Phalcon\Di\Injectable;
use Phalcon\Mvc\Model\Query\Builder;
use Website\Models\Client;
use Website\ObjectList\ClientMap;

/**
 * @property DbService $dbService
 */
class ClientService extends Injectable
{
    /**
     * @return ClientMap
     */
    public function getMap(): ClientMap
    {
        $query = (new Builder)
            ->from(Client::class)
            ->orderBy(Client::FIELD_NAME);

        return $this->dbService->getObjectMap($query, ClientMap::class);
    }

    /**
     * @return array
     */
    public function getNameMap(): array
    {
        $clientMap = $this->getMap();

        $clientNameMap = [];

        foreach ($clientMap as $id => $client){
            $clientNameMap[$id] = $client->name;
        }

        return $clientNameMap;
    }
}