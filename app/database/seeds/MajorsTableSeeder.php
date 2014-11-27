<?php


class MajorsTableSeeder extends Seeder {

    public function run()
    {
        Major::truncate();

        $majors = [
            // Arts id 1
            ["name" => "Music", "slug" => "music", "academic_school_id" => "1", "image" => "music_playing_violing.jpg"],
            ["name" => "Dance", "slug" => "dance", "academic_school_id" => "1", "image" => "dance_tango.jpg"],
            ["name" => "Theatre", "slug" => "theatre", "academic_school_id" => "1", "image" => "theatre.jpg"],
            ["name" => "Film", "slug" => "film", "academic_school_id" => "1", "image" => "filming_video.jpg"],

            // Business 2
            ["name" => "Agribusiness", "slug" => "agribusiness", "academic_school_id" => "2", "image" => "agribusiness.jpg"],
            ["name" => "Accounting & Audit", "slug" => "accounting-and-audit", "academic_school_id" => "2", "image" => "accounting_audit.jpg"],
            ["name" => "Business Administration", "slug" => "business-administration", "academic_school_id" => "2", "image" => "business_administration.jpg"],
            ["name" => "Business Intelligence & E-Business", "slug" => Str::slug("Business Intelligence & E-Business"), "academic_school_id" => "2", "image" => "business_intelligence.jpg"],
            ["name" => "Finance", "slug" => "finance", "academic_school_id" => "2", "image" => "finance.jpg"],
            ["name" => "Health Management", "slug" => "health-management", "academic_school_id" => "2", "image" => "health_management.jpg"],
            ["name" => "Hospitality and Tourism Operations Management", "slug" => Str::slug("Hospitality and Tourism Operations Management"), "academic_school_id" => "2", "image" => "hospitality_and_tourism_operations_management.jpg"],
            ["name" => "Human Resources", "slug" => Str::slug("Human Resources"), "academic_school_id" => "2", "image" => "human_resources.jpg"],
            ["name" => "Information Systems & Technology", "slug" => Str::slug("Information Systems & Technology"), "academic_school_id" => "2", "image" => "information_systems_technology.jpg"],
            ["name" => "International Business", "slug" => Str::slug("International Business"), "academic_school_id" => "2", "image" => "international_business.jpg"],
            ["name" => "Leadership", "slug" => Str::slug("Leadership"), "academic_school_id" => "2", "image" => "leadership2.jpg"],
            ["name" => "Management", "slug" => Str::slug("Management"), "academic_school_id" => "2", "image" => "management.jpg"],
            ["name" => "Marketing", "slug" => Str::slug("Marketing"), "academic_school_id" => "2", "image" => "marketing.jpg"],
            ["name" => "Real Estate", "slug" => Str::slug("Real Estate"), "academic_school_id" => "2", "image" => "real_estate.jpg"],
            ["name" => "Sports Business", "slug" => Str::slug("Sports Business"), "academic_school_id" => "2", "image" => "sports_business_management.jpg"],
            ["name" => "Supply Chain Management & Logistics", "slug" => Str::slug("Supply Chain Management & Logistics"), "academic_school_id" => "2", "image" => "supply_demand.jpg"],
            ["name" => "Tax", "slug" => Str::slug("Tax"), "academic_school_id" => "2", "image" => "tax.jpg"],
            ["name" => "Transfer Pricing", "slug" => Str::slug("Transfer Pricing"), "academic_school_id" => "2", "image" => "transfer_pricing.jpg"],

            // Communication 3
            ["name" => "Kindergarden Education", "slug" => Str::slug("Kindergarden Education"), "academic_school_id" => "3", "image" => "kindergarden_education.jpg"],
            ["name" => "Elementary Education", "slug" => Str::slug("Elementary Education"), "academic_school_id" => "3", "image" => "elementary_education.jpg"],
            ["name" => "Secondary Education", "slug" => Str::slug("Secondary Education"), "academic_school_id" => "3", "image" => "secondary_education.jpg"],
            ["name" => "Higher Education (University Level)", "slug" => Str::slug("Higher Education (University Level)"), "academic_school_id" => "3", "image" => "higher_education.jpg"],

            // Engineering 4
            ["name" => "Aeronautical", "slug" => Str::slug("Aeronautical"), "academic_school_id" => "4", "image" => "aeronautical.jpg"],
            ["name" => "Bioengineering", "slug" => Str::slug("Bioengineering"), "academic_school_id" => "4", "image" => "bioengineering.jpg"],
            ["name" => "Chemical Engineering", "slug" => Str::slug("Chemical Engineering"), "academic_school_id" => "4", "image" => "chemical_engineering.jpg"],
            ["name" => "Electrical Engineering", "slug" => Str::slug("Electrical Engineering"), "academic_school_id" => "4", "image" => "electrical_engineering.jpg"],
            ["name" => "Electronic  Engineering", "slug" => Str::slug("Electronic  Engineering"), "academic_school_id" => "4", "image" => "electronic_engineering.jpg"],
            ["name" => "Mechanical engineering", "slug" => Str::slug("Mechanical engineering"), "academic_school_id" => "4", "image" => "mechanical_engineering.jpg"],
            ["name" => "Industrial engineering", "slug" => Str::slug("Industrial engineering"), "academic_school_id" => "4", "image" => "industrial_engineering.jpg"],
            ["name" => "Web engineering", "slug" => Str::slug("Web engineering"), "academic_school_id" => "4", "image" => "web_engineering.jpg"],

            // Humanities & Social Work 5
            ["name" => "History", "slug" => Str::slug("History"), "academic_school_id" => "5", "image" => "history.jpg"],
            ["name" => "Languages", "slug" => Str::slug("Languages"), "academic_school_id" => "5", "image" => "languges.jpg"],
            ["name" => "Literature", "slug" => Str::slug("Literature"), "academic_school_id" => "5", "image" => "literature.jpg"],
            ["name" => "Philosophy ", "slug" => Str::slug("Philosophy "), "academic_school_id" => "5", "image" => "philosofy.jpg"],
            ["name" => "Religion", "slug" => Str::slug("Religion"), "academic_school_id" => "5", "image" => "religion.jpg"],
            ["name" => "Social Work", "slug" => Str::slug("Social Work"), "academic_school_id" => "5", "image" => "social_work.jpg"],

            // Medicine & Sciences 6
            ["name" => "Agriculture", "slug" => Str::slug("Agriculture"), "academic_school_id" => "6", "image" => "agriculture.jpg"],
            ["name" => "Architecture and Design", "slug" => Str::slug("Architecture and Design"), "academic_school_id" => "6", "image" => "achitecture.jpg"],
            ["name" => "Visual Communication", "slug" => Str::slug("Visual Communication"), "academic_school_id" => "6", "image" => "visual_communication.jpg"],
            ["name" => "Aviation", "slug" => Str::slug("Aviation"), "academic_school_id" => "6", "image" => "aviation.jpg"],
            ["name" => "Computer Sciences", "slug" => Str::slug("Computer Sciences"), "academic_school_id" => "6", "image" => "computer_sciences.jpg"],
            ["name" => "Healthcare Science", "slug" => Str::slug("Healthcare science"), "academic_school_id" => "6", "image" => "health_science.jpg"],
            ["name" => "Law", "slug" => Str::slug("Law"), "academic_school_id" => "6", "image" => "law.jpg"],
            ["name" => "Mathematics & Statistics", "slug" => Str::slug("Mathematics & Statistics"), "academic_school_id" => "6", "image" => "statistics.jpg"],
            ["name" => "Medicine", "slug" => Str::slug("Medicine"), "academic_school_id" => "6", "image" => "medicine.jpg"],
            ["name" => "Military sciences", "slug" => Str::slug("Military sciences"), "academic_school_id" => "6", "image" => "military_sciences.jpg"],
            ["name" => "Natural Sciences", "slug" => Str::slug("Natural Sciences"), "academic_school_id" => "6", "image" => "natural_science.jpg"],
            ["name" => "Public administration", "slug" => Str::slug("Public administration"), "academic_school_id" => "6", "image" => "public_administration.jpg"],

            // Social Sciences 7
            ["name" => "Political Science", "slug" => Str::slug("Political Science"), "academic_school_id" => "7", "image" => "political_science.jpg"],
            ["name" => "Psychology", "slug" => Str::slug("Psychology"), "academic_school_id" => "7", "image" => "psychology.jpg"],
            ["name" => "Sociology", "slug" => Str::slug("Sociology"), "academic_school_id" => "7", "image" => "sociology.jpg"],

        ];

        foreach ($majors as $index)
        {
            Major::create($index);
        }
    }

}