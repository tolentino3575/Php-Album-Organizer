<?php
	class Albums
	{
		private $artist;
		private $albumName;

		function __contstruct($artist, $albumName)
		{
			$this->artist = $arist;
			$this->albumName = $albumName;
		}

		function setArtist($new_artist)
		{
			$this->artist = $new_artist;
		}

		function setAlbum($new_album)
		{
			$this->albumName = $new_album;
		}

		function getArtist()
		{
			return $this->artist;
		}

		function getAlbum()
		{
			return $this->albumName;
		}
	}

?>
