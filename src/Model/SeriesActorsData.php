<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb\Model;

/**
 * Class SeriesActorsData.
 *
 * @category Thetvdb
 *
 * @author   Alwin Drenth <adrenth@gmail.com>
 * @license  http://opensource.org/licenses/MIT The MIT License (MIT)
 *
 * @see     https://github.com/adrenth/thetvdb2
 *
 * @method int    getId()
 * @method int    getSeriesId()
 * @method string getName()
 * @method string getRole()
 * @method int    getSortOrder()
 * @method string getImage()
 * @method int    getImageAuthor()
 * @method string getImageAdded()
 * @method string getLastUpdated()
 */
class SeriesActorsData extends ValueObject
{
    protected function getAttributes(): array
    {
        return [
            'id',
            'seriesId',
            'name',
            'role',
            'sortOrder',
            'image',
            'imageAuthor',
            'imageAdded',
            'lastUpdated',
        ];
    }
}
