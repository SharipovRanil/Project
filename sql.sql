-- список животных, которым поставлена указанная прививка
select Animals.* from Animals
JOIN (SELECT DISTINCT Id_Animal AS Animal FROM `HistoryVaccinations` WHERE ID_Vaccination=2) A  WHERE Animals.ID_Animal=Animal

-- полный список поставщиков корма

SELECT * FROM `Supplier`

-- список животных, которые питаются определенным типом корма
SELECT * FROM `Animals`
WHERE ID_Food=2

-- список вакцинаций в зоопарке
SELECT Vaccinations.*, Animals.* FROM `HistoryVaccinations` 
JOIN Vaccinations ON Vaccinations.ID_Vaccination =HistoryVaccinations.ID_Vaccination
JOIN Animals ON HistoryVaccinations.ID_Animal=Animals.ID_Animal

-- список персонала, где гендер - женщины
SELECT * FROM `Personal` 
WHERE Gender="F"

--  Персонал, ухаживающий за определенным животным
SELECT Personal.* FROM `AnimalWorkers` 
JOIN Personal on Personal.ID_Personal=AnimalWorkers.ID_Personal
WHERE AnimalWorkers.ID_Animal=1