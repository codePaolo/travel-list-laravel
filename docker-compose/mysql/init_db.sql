DROP TABLE IF EXISTS `places`;

CREATE TABLE `places` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visited` tinyint(1) NOT NULL DEFAULT '0',
  `lat` float(9,6) NOT NULL DEFAULT '0.00',
  `lng` float(9,6) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `places` (`id`, `name`, `visited`, `lat`, `lng`)
VALUES
	(1, 'Maui, HI', 1, 20.764429, -156.445007),
	(2, 'New York, NY', 1, 40.712780, -74.005966),
	(3, 'Puerto Rico', 1, 18.220831, -66.590149),
	(4, 'O\'ahu, HI', 1, 21.284636, -157.834076),
	(5, 'Kauai, HI', 1, 21.958210, -159.673141),
	(6, 'Moorea', 1, -17.499079, -149.872055),
	(7, 'Washington D.C.', 1, 38.890095, -77.036552),
	(8, 'Chicago, IL', 1, 41.882561, -87.622917),
	(9, 'Santa Barbara, CA', 1, 34.420830, -119.698181),
	(10, 'Portland, OR', 1, 45.523449, -122.676208),
	(11, 'Miami, FL', 1, 25.774269, -80.193657),
	(12, 'Vancouver, BC', 1, 49.249660, -123.119339),
	(13, 'Cancun, MX', 1, 21.174290, -86.846558),
	(14, 'Toronto, BC', 1, 43.700111, -79.416298),
	(15, 'Seattle, WA', 1, 47.606209, -122.332069),
	(16, 'Hawa\'ii, HI', 1, 19.501390, -154.970566),
	(17, 'Boston, MA', 1, 42.358429, -71.059769),
	(18, 'Barcelona, Spain', 1, 41.388790, 2.158990),
	(19, 'Rome, Italy', 1, 41.891930, 12.511330),
	(20, 'Florence, Italy', 1, 43.779251, 11.246260),
	(21, 'Napa, CA', 1, 38.297138, -122.285530),
	(22, 'San Francisco, CA', 1, 37.774929, -122.419418),
	(23, 'Las Vegas, NV', 1, 36.114647, -115.172813),
	(24, 'Paris, France', 1, 48.853409, 2.348800),
	(25, 'Amsterdam, Holland', 1, 52.374031, 4.889690),
	(26, 'Yosemite, CA', 1, 37.865101, -119.538330),
	(27, 'Manila, Philippines', 1, 14.550270, 121.032692),
  (28, 'Japan', 0, 36.204824, 138.252924),
  (29, 'South Korea', 0, 35.907757, 127.766922),
  (30, 'Switzerland', 0, 46.818188, 8.227512);