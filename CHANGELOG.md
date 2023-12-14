# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [7.0.0] - 2023-12-14
### Changed
- Minimum requirement PHP 8.2.
- Minimum requirement Doctrine ORM 2.17.

## [6.0.1] - 2023-12-14
### Added
- Phpcbf.
- Test groups.
- Infection.

### Changed
- Documentation for continuous integration.

### Fixed
- Limiting Doctrine ORM version to <2.17 for PHP 8.1 compatibility.

## [6.0.0] - 2022-10-05
### Changed
- Properties are back to protected.
- `slug` is now a nullable.
- Setter methods of `UpdatedAt` and `ConnectedAt` allow null.

### Fixed
- Namespace for Doctrine attributes in `ConnectedAt`, `CreatedAt` and `UpdatedAt`.
- `createdAt` was nullable in attributes.

## [5.0.1] - 2022-09-22
### Fixed
- `id` property must stay protected.

## [5.0.0] - 2022-09-22
### Changed
- Minimum requirement Doctrine ORM 2.13.
- Doctrine XSD URLs for XML mapping.
- `priority` is now a small int with a default value of 0.
- Properties are now private.

## [4.0.0] - 2022-05-28
### Changed
- Minimum requirement PHP 8.1.
- Minimum requirement Doctrine ORM 2.11.

## [3.0.0] - 2022-04-05
### Added
- phpDocumentor.
- Documentation for development.

### Changed
- The "id" property of IntId is initialised to null instead of -1.
- "build" directory to "ci".

### Fixed
- Project path in `README.md` for PHPDoc.

## [2.1.0] - 2021-09-23
### Added
- Slug trait.

### Fixed
- phpDoc for Priority.

## [2.0.1] - 2021-09-13
### Fixed
- `composer.json` requirements and description.

## [2.0.0] - 2021-09-13
### Added
- PHP 8 attributes support (requires PHP 8+ and Doctrine 2.9+).

## [1.1.1] - 2021-09-13
### Fixed
- Field name in `UpdatedAt` annotations.

## [1.1.0] - 2021-03-14
### Added
- `ConnectedAt`, `CreatedAt`, `UpdatedAt` and `TimestampableImmutable` traits with \DateTimeImmutable fields.

## [1.0.0] - 2021-02-22
### Added
- A default abstract entity : `IntId`.
- Some common fields in traits : `ConnectedAt`, `CreatedAt`, `UpdatedAt`, `Available` and `Priority`.
- A `Timestampable` trait which is using `CreatedAt` and `UpdatedAt`.
