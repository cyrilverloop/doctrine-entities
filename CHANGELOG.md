# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- phpDocumentor.

### changed
- The "id" property of IntId is initialised to null instead of -1.
- "build" directory to "ci".

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
