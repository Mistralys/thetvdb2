<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb\Model;

/**
 * @author   Alwin Drenth <adrenth@gmail.com>
 *
 * @method int    getId()
 * @method int    getAbsoluteNumber()
 * @method int    getAiredEpisodeNumber()
 * @method int    getAiredSeason()
 * @method int    getDvdEpisodeNumber()
 * @method int    getDvdSeason()
 * @method string getEpisodeName()
 * @method string getOverview()
 * @method string getFirstAired()
 * @method int    getLastUpdated()
 */
class BasicEpisode extends ValueObject
{
    /**
     * {@inheritDoc}
     */
    protected function getAttributes(): array
    {
        return [
            'id',
            'absoluteNumber',
            'airedEpisodeNumber',
            'airedSeason',
            'dvdEpisodeNumber',
            'dvdSeason',
            'episodeName',
            'overview',
            'firstAired',
            'lastUpdated',
        ];
    }
}
