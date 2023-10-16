SELECT
	equipo,
	sum( (pg*3) + (pe*1)) pts,
	sum(pj) pj,
	sum(pg) pg,
	sum(pe) pe,
	sum(pp) pp,
	sum(gf) gf,
	sum(gc) gc,
	sum(dif) dif
FROM (
	SELECT 
		equipos_id_a equipo,
		sum( case when f.goles_a >= 0 AND f.goles_b  >= 0 then 1 else 0 end ) pj,
		sum( case when f.goles_a > f.goles_b then 1 else 0 end ) pg,
		sum( case when f.goles_a = f.goles_b then 1 else 0 end ) pe,
		sum( case when f.goles_a < f.goles_b then 1 else 0 end ) pp,
		sum( goles_a ) gf, 
		sum( goles_b ) gc,
		( sum(goles_a) - sum(goles_b) ) dif
	FROM fixtures f
	-- WHERE f.equipos_id_a = 1
	GROUP BY equipos_id_a
	union
	SELECT 
		equipos_id_b equipo,
		sum( case when f.goles_b >= 0 AND f.goles_a  >= 0 then 1 else 0 end ) pj,
		sum( case when f.goles_b > f.goles_a then 1 else 0 end ) pg,
		sum( case when f.goles_b = f.goles_a then 1 else 0 end ) pe,
		sum( case when f.goles_b < f.goles_a then 1 else 0 end ) pp,
		sum( goles_b ) gf, 
		sum( goles_a ) gc,
		( sum(goles_b) - sum(goles_a) ) dif
	FROM fixtures f
	-- WHERE f.equipos_id_b = 1
	GROUP BY equipos_id_b
)



