<?php

class cityLoader
{
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function getPDO()
    {
        return $this->pdo;
    }

    /**
     * @return City[]
     */

    public function getCitys()
    {
        $citys = array();

        $citysData = $this->queryForCitys();

        foreach ($citysData as $cityData) {
            $citys[] = $this->createCityFromData($cityData);
        }

        return $citys;
    }

    private function createCityFromData(array $cityData)
    {
        $city = new City($cityData['img_title']);
        $city->setImgId($cityData['img_id']);
        $city->setImgFilename($cityData['img_filename']);
        $city->setImgWidth($cityData['img_width']);
        $city->setImgHeight($cityData['img_height']);

        return $city;
    }

    private function queryForCitys()
    {
        $statement = $this->getPDO()->prepare('SELECT * FROM images');
        $statement->execute();
        $citysArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $citysArray;
    }
}